
export default function InputSelect({
  id,
  name,
  label,
  options,
  value,
  onChange,
  error
}) {
  return (
    <div className="flex flex-col mb-3 gap-1">
      <label htmlFor={id} className="font-semibold text-sm">
        {label}
      </label>

      <select
        id={id}
        name={name}
        value={value}
        onChange={onChange}
        className="border border-gray-300 p-2 rounded-lg"
      >
        <option value="">Sélectionner un rôle</option>

        {options.map(option => (
          <option key={option} value={option}>
            {option}
          </option>
        ))}
      </select>

      {error && (
        <p className="text-red-500 text-xs">{Array.isArray(error) ? error[0] : error}</p>
      )}
    </div>
  );
}
