export default function StatCard({ title, value, descriprion }) {
  return (
    <div className="border border-gray-200 rounded-lg p-3">
      <p className="text-sm">{title}</p>
      <p className="text-3xl font-bold">{value}</p>
      <p className="text-sm text-green-700">{descriprion}</p>
    </div>
  );
}
